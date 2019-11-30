import React, {Component} from 'react';
import ReactDOM from 'react-dom';



export default class NavBar extends Component
{
    render()
    {
        return(
            <div className="navigation-wrapper">
                <div className="navigation-menu">
                    <ul>
                        <li><a href="history.php">History</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="magazine.php">Magazine</a></li>
                        <li><a href="joinus.php">JoinUs</a></li>
                        <li><a href="contact.php">CotactUs</a></li>
                    </ul>
                </div>
            </div>
        )
    }
}