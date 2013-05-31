# A sample Guardfile
# More info at https://github.com/guard/guard#readme

guard 'phpunit', :cli => '--colors', :tests_path => 'tests' do
  watch(%r{^.+Test\.php$})

  watch(%r{app/(.+).php}) {|m| "tests/libraries/#{m[1]}Test.php"}
end
