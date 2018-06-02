deploy "/srv/#{appname}" do
  repo 'https://github.com/esdrasrios/wordpres4.8.3.git'
  revision 'HEAD'
  enable_submodules false
  migrate true
  migration_command 'rake db:migrate'
  # Giving a string for environment sets RAILS_ENV, MERB_ENV, RACK_ENV
  environment 'production'
  shallow_clone true
  action :deploy
  restart_command 'touch tmp/restart.txt'
end