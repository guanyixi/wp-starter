// Scripts
import Person from './scripts/Person'
import ExampleReactComponent from './scripts/ExampleReactComponent'
import React from 'react'
import ReactDOM from 'react-dom'

const person1 = new Person("Brooklyn")

if(document.querySelector("#react-example")){
    ReactDOM.render(<ExampleReactComponent />, document.querySelector("#react-example"))
}

// Styles
import './index.scss';
import './style.scss';