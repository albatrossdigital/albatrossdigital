api = 2
core = 8.x
; Include the definition for how to build Drupal core directly, including patches:
includes[] = drupal-org-core.make
; Download the Spark install profile and recursively build all its dependencies:
projects[spark][type] = profile 
projects[spark][download][type] = git
projects[spark][download][branch] = 8.x-1.x
