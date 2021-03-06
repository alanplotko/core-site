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
              <div class="ui container logo">
                <a href={self::URL}><img src="/images/logo.png" /></a>
              </div>
              <div class="ui massive inverted menu navigation">
                <div class="ui container">
                  {$navItems}
                </div>
              </div>
            </div>;
    }
}
