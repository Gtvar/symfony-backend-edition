# -*- coding: utf-8 -*-

import sys, os
from sphinx.highlighting import lexers
from pygments.lexers.web import PhpLexer
from pygments.lexers.web import JavascriptLexer

lexers['php'] = PhpLexer(startinline=True)
lexers['javascript'] = JavascriptLexer(startinline=True)
extensions = []


source_suffix = '.rst'
source_encoding = 'utf-8'
master_doc = 'README'

project = u'Project name'
copyright = u'Copyright'

version = '1.0'
release = '1.0.0'

language = 'php'
highlight_language = 'php'

exclude_trees = []
exclude_patterns = []