name 'deployphp'
maintainer 'Md Ariful Islam'
maintainer_email 'aisonnet01@gmail.com'
license 'All Rights Reserved'
description 'Installs/Configures deployphp'
long_description 'Installs/Configures deployphp'
version '0.1.0'
chef_version '>= 12.14' if respond_to?(:chef_version)

# The `issues_url` points to the location where issues for this cookbook are
# tracked.  A `View Issues` link will be displayed on this cookbook's page when
# uploaded to a Supermarket.
#
# issues_url 'https://github.com/<insert_org_here>/deployphp/issues'

# The `source_url` points to the development repository for this cookbook.  A
# `View Source` link will be displayed on this cookbook's page when uploaded to
# a Supermarket.
#
# source_url 'https://github.com/<insert_org_here>/deployphp'

depends "application", "~> 5.2.0"
