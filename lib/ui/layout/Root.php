<?hh

final class :ui:root extends :ui:base {
  attribute :div;

  protected function compose(): :div {
    $this->addClass('');
    return
      <div>{$this->getChildren()}</div>;
  }

}