import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import NavBar from './NavBar';



export default class Header extends Component
{
    constructor (props)
    {
        super(props);
        this.state = 
        {
            videoURL: 'http://127.0.0.1:8000/img/introvideo.mp4'
        }
    }

    render()
    {
        return(
            
            <div className="section">
                <NavBar/>
                <div className="container">
                    <div className="navigation-button mt-4">
                        <i className="fa fa-bars"></i>
                    </div>
                </div>

                <div className="video-container">
                <video id="videoBG" loop autoPlay>
                    <source src={this.state.videoURL} type="video/mp4" />
                    <source src={this.state.videoURL} type="video/ogg" />
                    Your browser does not support the video tag.
                </video>


                </div>
            </div>
        )
    }
}