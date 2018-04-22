// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class Calendar extends Component {

	static locale = (navigator.languages && navigator.languages.length) ?
		navigator.languages[0] :
		navigator.language ?
		  navigator.language :
		  'en';

  static slug = 'evrdm_calendar';

  render() {
    const Content = this.props.content;
    const theDate = new Date(this.props.the_date);
    const isSmall = this.props.is_small;
    const position = this.props.position;
    const theClasses = ['evrdm_calendar_item'];

    if ( 'on' === isSmall ) {
    	theClasses.push('size-small');
    } else {
    	theClasses.push('size-big');
    }

    theClasses.push('pos-' + position);

	const theMonth = theDate.toLocaleString(this.locale, { month: "short" });
	const theMonthName = theDate.toLocaleString(this.locale, { month: "long" });
	const theDay = theDate.getDate();
	const theDayName = theDate.toLocaleString(this.locale, { weekday: "long" });

    return (
		<div className={theClasses.join(' ')}>
			<div className="icon">
				<span className="month">{theMonth}</span>
				<span className="day">{theDay}</span>
			</div>
			<div className="dayname">{theDayName}</div>
			<div className="date">{theDay} {theMonthName}</div>
			<div className="content"><Content/></div>
		</div>
    );
  }
}

export default Calendar;
