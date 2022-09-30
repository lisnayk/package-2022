# Create a PHP composer package | How to

Composer packages are a great way of making your code available to everyone.

It my be a daunting thought to create your first package, but if you break it down into simple steps, it becomes much
less scary! Let's see:

* Create your composer file
* Register your namespaces and autoloaders
* Write your code
* Push your code to your repository
* Create a tag or a version
* Submit your package to Packagist (the repo of composer packages)

# Require a Git repository that has a composer.json file


Now that we’ve identified a GIt repository with a composer.json file, let’s require that repository as a package within
our project.

Within our project’s composer.json file we need to define a new property (assuming it doesn’t exist already) named
“repositories“. The value of the repositories property is an array of objects. Each object containing information about
the repository we want to include in our project. Consider this composer.json file for our custom project.

```json
{
  "name": "<vendor>/<name>",
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/lisnayk/package-2022.git"
    }
  ],
  "require": {
    "lisnyak/package-2022": "dev-master"
  }
}
```
[Mode details](https://www.daggerhartlab.com/composer-how-to-use-git-repositories/)
