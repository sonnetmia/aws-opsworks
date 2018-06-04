app = search(:aws_opsworks_app).first
template "/srv/#{app['shortname']}/wp-config.php" do
	source "wp-config.php.erb"
	owner 'www-data'
	group 'www-data'
	mode '0640'
	action :create
	variables(
		:database   => '#{app['environment']['testvalue']}'
	)
end

