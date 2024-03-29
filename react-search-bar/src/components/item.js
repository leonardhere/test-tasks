import React, { Component } from 'react';

class Item extends Component {

  constructor(props) {
    super(props);
    this.itemRef = React.createRef();
  }

  onClick = () => {
    this.props.onClick(this.props.item);
  };

  onMouseMove = event => {
    this.props.onMouseMove(event, this.props.index);
  };

  render() {
    const { props } = this;

    return (
      <li
        className={props.className}
        key={props.item}
        ref={this.itemRef}
        onClick={this.onClick}
        onMouseMove={this.onMouseMove}
      >
        {props.itemRenderer(props.item, props.searchTerm)}
      </li>
    );
  }
}

export default Item;
