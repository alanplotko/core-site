<?hh

final class :ui:root extends :ui:base {
  attribute :div;

  protected function compose(): :div {
    $this->addClass('ui container');
    return
      <div>{$this->getChildren()}</div>;
  }

}