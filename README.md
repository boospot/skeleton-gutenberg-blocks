# sgb
Skeleton for WordPress Plugin Boilerplate with Namespace and Gutenberg Block support


Changes to Made:

1. Rename files in:
    * `/sgb.php`
    * `/languages/sgb.pot`
2. Run Search Replace with **Preserve Case**:
    * @plugin For Plugin Name `sgb => YourPluginName`
    * @git_author For Github Author: `boospot => YourAuthorName`
    * @author For Author Name: `Rao => YourName`
    * @author For email: `rao@booskills.com => YourEmail`
    * @link For Link: `https://booskills.com/rao => YourLink`
    * Update Plugin Comment Block in main file `/sgb.php`
3. After Adding more files as you go, use composer to update autoload if you need to. You shall need to have composer installed on your computer. In Terminal in the plugin directory, run following:
    *  `composer update`
4. To install NPM dependencies, run the following command:
   * `npm install`
5. After doing all the magic of coding, run:
   * `npm run build`
6. While developing you may use the watcher by using the command:
   * `npm run start`