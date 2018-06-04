#
# Cookbook:: wp-config
# Recipe:: default
#
# Copyright:: 2018, The Authors, All Rights Reserved.

app = search("aws_opsworks_app").first
Chef::Log.info("********** The app's short name is '#{app['shortname']}' **********")
Chef::Log.info("********** The app's URL is '#{app['app_source']['url']}' **********")


data_bag("aws_opsworks_app").each do |data_bag_item|
  app = data_bag_item("aws_opsworks_app", data_bag_item)
  Chef::Log.info("********** The app's short name is '#{app['shortname']}' **********")
  Chef::Log.info("********** The app's URL is '#{app['app_source']['url']}' **********")
  Chef::Log.info("********** The app's URL is '#{app['environment']['testvalue']}' **********")
end


