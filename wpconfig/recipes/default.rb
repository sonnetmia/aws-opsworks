app = search(:aws_opsworks_app).first
template "/srv/#{app['shortname']}/wp-config.php" do
	source "wp-config.php.erb"
	owner 'www-data'
	group 'www-data'
	mode '0640'
	action [:delete, :create]
	variables(
	    :db_name          =>  "#{app['environment']['DATABASE_NAME']}"
	    #:db_user          =>  "#{app['environment']['DATABASE_USER']}",
	    #:db_password      =>  "#{app['environment']['DATABASE_PASWORD']}",	    	    
	    #:db_host          =>  "#{app['environment']['DATABASE_HOST']}",
	    #:wp_env           =>  "#{app['environment']['WP_ENV']}",
	    #:wp_home          =>  "#{wp_home}",
	    #:wp_siteurl       =>  "#{site_url}",
	    #:auth_key         =>  "#{app['environment']['AUTH_KEY']}",
	    #:secure_auth_key  =>  "#{app['environment']['SECURE_AUTH_KEY']}",
	    #:logged_in_key    =>  "#{app['environment']['LOGGED_IN_KEY']}",
	    #:nonce_key        =>  "#{app['environment']['NONCE_KEY']}",
	    #:auth_salt        =>  "#{app['environment']['AUTH_SALT']}",
	    #:secure_auth_salt =>  "#{app['environment']['SECURE_AUTH_SALT']}",
	    #:logged_in_salt   =>  "#{app['environment']['LOGGED_IN_SALT']}",
	    #:nonce_salt       =>  "#{app['environment']['NONCE_SALT']}"
	)    	
end

