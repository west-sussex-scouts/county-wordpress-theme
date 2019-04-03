const semver = require('semver');
const gitVersion = require('git-tag-version');
const Git = require("simple-git")();
const fs = require('fs');

function setPackageJsonVer(version) {
    const data = JSON.parse(fs.readFileSync("package.json"));
    data.version = version;
    fs.writeFileSync("package.json", JSON.stringify(data, null, 4));
    return true;
}

function setCssVer(version) {
    const data = fs.readFileSync('style.css', 'utf-8');
    var newData = data.replace(/Version: .*/, 'Version: ' + version)
    fs.writeFileSync('style.css', newData, 'utf-8')
    return true
}

function gitCommit(version) {
    Git.add(['package.json', 'style.css'])
    Git.commit('Bump version to ' + version)
}

function gitTag(version) {
    const currentGitVersion = gitVersion()
    const currentGitVersionClean = semver.major(currentGitVersion) + "." + semver.minor(currentGitVersion) + "." + semver.patch(currentGitVersion)
    Git.tag(['--force', 'v' + version])
}

const currentGitVersion = gitVersion();
console.log('Current Git version: ', currentGitVersion)
const packageJsonVersion = process.env.npm_package_version;
console.log('package.json version: ', packageJsonVersion)
const gitPreRelease = semver.prerelease(currentGitVersion);

// if (gitPreRelease ) {
//     if (gitPreRelease[0] != "SNAPSHOT" ) {
//         console.log("This is a branch - exitting.")
//         process.exit()
//     }
// }

if ( ! gitPreRelease ) {
    console.log("Incrementing version to: " + currentGitVersion + " from: " + "git tag");
    setPackageJsonVer(currentGitVersion);
    setCssVer(currentGitVersion);
    gitCommit(currentGitVersion);
    gitTag(currentGitVersion)
} else if ( gitPreRelease ) {
    const currentGitVersionClean = semver.major(currentGitVersion) + "." + semver.minor(currentGitVersion) + "." + semver.patch(currentGitVersion)
    const newPackageJsonVersion = semver.inc(packageJsonVersion, 'patch');
    const newGitVersion = semver.inc(currentGitVersionClean, 'patch');
    var newVersion = null;
    const newVerComp = semver.compare(newGitVersion, newPackageJsonVersion);
    if (newVerComp > 0) {
        newVersion = newGitVersion;
        console.log("Incrementing version to: " + newGitVersion + " from: " + "git");
    } else {
        newVersion = newPackageJsonVersion;
        console.log("Incrementing version to: " + newPackageJsonVersion + " from: " + "package.json");
    }
    console.log(newVersion);
    setPackageJsonVer(newVersion);
    setCssVer(newVersion);
    gitCommit(newVersion)
    gitTag(newVersion);
}
