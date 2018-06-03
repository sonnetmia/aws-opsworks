app = search(:aws_opsworks_app).first
template "/srv/#{app['shortname']}/wp-config.php" do
  source "wp-config.php.erb"
  owner 'www-data'
  group 'www-data'
  mode '0640'
end


#cookbook_file "/srv/wordpress/wp-config.php" do
##  source "wp-config.php"
#  mode '0640'
#  action :create
#  owner 'www-data'
#  group 'www-data'
#end
