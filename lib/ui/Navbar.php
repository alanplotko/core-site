<?hh

class :ui:navbar extends :x:element {
    attribute
      array<string, string> content @required, // The pages <page name => link>
      string page-title @required; // The title of the current page

    const string TITLE = 'CoRE';
    const string URL = '/';

    protected function render(): :div {
        $navItems = array();
        $requestUri = $_SERVER["REQUEST_URI"];
        foreach ($this->:content as $itemTitle => $link) {
            $link = preg_replace("/(\/[^\/]*)$/", $link, $requestUri);
            $navItems[] =
                <a class={!strcasecmp($this->:page-title, $itemTitle) ? 'active item' : 'item'} href={$link}>{$itemTitle}</a>;
        }
        return
            <div>
              <div class="logo">
                <a href={self::URL}><img src="/images/logo.png" /></a>
              </div>
              <div id="navigation" class="ui large stackable menu no-margin">
                <div class="menu">
                  {$navItems}
                </div>
              </div>
            </div>;
    }
}
