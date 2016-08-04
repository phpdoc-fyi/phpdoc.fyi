# phpdoc.fyi Orchestrator

The Orchestrator is responsible for:
* Maintaining a list of packages that need to be generated
* Making sure that no more than 1 package version in a major-release series is published
* Providing a queue of packages to be generated (with some time-out like semantics)
