import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends React.Component {
  constructor() {
    super();
    this.state = {
      message : "World"
    };

    this.updateMessage = this.updateMessage.bind(this);
  }

  updateMessage() {
    this.setState({
      message : "My Friend"
    });
  }

  render() {
    return(
      <div>
        <h1>Hello {this.state.message}</h1>
        <button onClick={this.updateMessage}>Clik</button>
      </div>
    )
  }
}

export default App;
