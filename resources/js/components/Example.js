import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import NavBar from './NavBar';
import Header from './Header';
export default class Example extends Component {
    render() {
        return (
            
            <div className="h-100 w-100">
                <Header/>
                <div className="container">
                    <div className="navigation-button mt-4">
                        <i className="fa fa-bars"></i>
                    </div>
                    <NavBar/>
                </div>
                <div className="row justify-content-center align-items-center h-100">
                    <div className="col-md-8 mx-auto">
                        <h1 className='text-center'>We Are Coming<span className='red'>Soon</span></h1>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
