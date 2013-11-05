#hypeThemeX
## Unleashing syntatical awesomeness in Elgg

hypeThemeX is an original SASS-driven theming project that brings
the heart of Compass and Foundation to Elgg.

### Features

* Fully responsive layout (Foundation grid)
* Minimal interference with and replacement of core Elgg views
* Easily switch between compiled themes using plugin settings
* Includes SASS source files
* Reliant on Compass and Foundation mixins
* A set of custom Elgg @mixin directives for image blocks, modules, lists etc
* Ready for "sass watch" (make sure you have the compass gem)


### Compiling your own theme

1. Educate yourself about SASS http://alistapart.com/article/getting-started-with-sass
2. Download and install a compiler of your preference http://sass-lang.com/install
3. Create a new folder in ```mod/hypeThemeX/sass/themes``` and copy sample files from ```mod/hypeThemeX/sass/themes/default```
4. Add ```mod/hypeThemeX``` as a watched folder in your SASS compiler app
5. Modify the ```_variables.scss``` to change the color theme, and add your custom selectors to the ```theme.scss``` file


### Acknowledgements / Credits / References

* SASS http://sass-lang.com/
* Compass http://compass-style.org/
* Foundation http://foundation.zurb.com/
* FontAwesome http://fortawesome.github.io/Font-Awesome/


## Screenshots ##

![alt text](https://raw.github.com/hypeJunction/hypeThemeX/master/screenshots/default_profile_full.png "Default Theme - Proifle - Desktop")
![alt text](https://raw.github.com/hypeJunction/hypeThemeX/master/screenshots/default_profile_mobile.png "Default Theme - Profile - Mobile")
![alt text](https://raw.github.com/hypeJunction/hypeThemeX/master/screenshots/yours_for_a_day_mobile.png "Yours for a day Theme - Activity - Mobile")
