import React from 'react'
import Ticker from "react-ticker";
import pepper from '../../images/pepper.png'
import classes from './PaperTicker.module.scss'

const TickerStyle = {
    display: 'flex',
    alightItems: 'center',
    marginRight: '28px'
  }
  
  const TickerTextStyle = {
      fontSize: '17px',
      fontStyle: 'normal',
      fontWeight: 400,
      lineHeight: '25.92px',
      letterSpacing: '0.5px',
      textTransform: 'uppercase',
      paddingLeft: '28px'
  }

const PaperTicker = ({text}) => {
  return (
    <div className={classes.PaperContainer}>
      <Ticker>
      {() => (
        <>
        <div style={TickerStyle}>
          <img src={pepper} alt="pepper" />
          <div style={TickerTextStyle}>{text}</div>
        </div>
        </>
      )}
    </Ticker>
  </div>
  )
}

export default PaperTicker
