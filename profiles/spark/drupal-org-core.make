; A separate drupal-org-core.make file makes it so we can apply core patches
; if we need to.

api = 2
core = 8.x
projects[drupal][type] = core
projects[drupal][download][type] = git
; Wed, 4 Sep 2013 11:09:19 +0000 (12:09 +0100) (tagged alpha3)
projects[drupal][download][revision] = 970fdb9e479f15291a9b54ea429c68e1b621607a
projects[drupal][download][branch] = 8.x

; CORE PATCHES
; None currently :)

; EDIT MODULE
; None currently :)

; EDITOR MODULE
; None currently :)

; UNIFIED EDIT
; None currently :)

; TOOLBAR
; None currently :)

; MOBILE PREVIEW
; Add a responsive preview bar to Drupal core
projects[drupal][patch][1741498] = https://drupal.org/files/responsive-preview-1741498-270-against-alpha3.patch
