cookbook_file "/srv/wordpress/wp-config.php" do
  source "wp-config.php"
  mode '0640'
  action :create
  owner 'www-data'
  group 'www-data'
end
