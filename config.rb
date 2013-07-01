# Require any additional compass plugins here.
require 'toolkit'

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "public/css"
sass_dir = "client/scss"
images_dir = "public/img"
javascripts_dir = "public/js"
fonts_dir = "public/css/fonts"

output_style = :compressed

relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false
color_output = false
sass_options = {:debug_info => false}

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass scss scss && rm -rf sass && mv scss sass
preferred_syntax = :scss
