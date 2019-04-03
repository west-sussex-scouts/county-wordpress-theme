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
    Git.push('origin')
}

function gitTag(version) {
    const currentGitVersion = gitVersion()
    const currentGitVersionClean = semver.major(currentGitVersion) + "." + semver.minor(currentGitVersion) + "." + semver.patch(currentGitVersion)
    Git.tag(['--force', 'v' + version])
    Git.pushTags('origin', {args: ['--force']});
}

var currentGitVersion = gitVersion();
console.log('Current Git version: ', currentGitVersion)
const packageJsonVersion = process.env.npm_package_version;
console.log('package.json version: ', packageJsonVersion)
var gitPreRelease = semver.prerelease(currentGitVersion);

if (gitPreRelease ) {
    if ( gitPreRelease[0].match(/[0-9]*\.[0-9]*\.[0-9]*-.*-SNAPSHOT/) ) {
        if (! gitPreRelease.endsWith("HEAD-SNAPSHOT")) {
            console.log("This is a branch - exiting.")
            process.exit()
        }
        gitPreRelease = null;
        currentGitVersion = semver.dec(currentGitVersion, 'patch')
    }
}
const newGitVersion = semver.major(currentGitVersion) + "." + semver.minor(currentGitVersion) + "." + semver.patch(currentGitVersion)
const newPackageJsonVersion = semver.inc(packageJsonVersion, 'patch');

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
