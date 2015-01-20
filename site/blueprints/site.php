<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  footerleft:
    label: Footer info (links)
    type:  textarea
  footerright:
    label: Footer info (rechts)
    type:  textarea