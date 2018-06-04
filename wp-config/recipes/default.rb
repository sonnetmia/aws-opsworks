#
# Cookbook:: wp-config
# Recipe:: default
#
# Copyright:: 2018, The Authors, All Rights Reserved.

app = search("aws_opsworks_app").first
Chef::Log.info("********** The app's short name is '#{app['shortname']}' **********")
Chef::Log.info("********** The app's URL is '#{app['app_source']['url']}' **********")