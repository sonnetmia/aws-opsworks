#install

apt_package "nginx-extras" do
action :install
end

apt_package "php-fpm" do
action :install
end

apt_package "php-mysql" do
action :install
end

template "/etc/nginx/nginx.conf" do
 source "nginx.conf.erb"
 owner "root"
 group "www-data"
 mode "640"
 notifies :run, "execute[reload-nginx]"
end

template "/etc/nginx/sites-available/default" do
 source "default.erb"
 owner "root"
 group "www-data"
 mode "640"
 notifies :run, "execute[reload-nginx]"
end

template "/etc/php/7.0/fpm/php.ini" do
 source "php.ini.erb"
 owner "root"
 group "www-data"
 mode "640"
 notifies :run, "execute[reload-php]"
end

execute "reload-nginx" do
  command "systemctl reload nginx"
  action :nothing
end

execute "reload-php" do
  command "systemctl restart php7.0-fpm"
  action :nothing
end
