<?hh

final class :ui:col extends :ui:base {
	attribute
		:div;

  protected function compose(): :div {
    $this->addClass('column');
    return
      <div>{$this->getChildren()}</div>;
  }
}
