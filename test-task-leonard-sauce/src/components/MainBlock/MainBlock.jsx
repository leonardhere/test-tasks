import React from 'react'
import Ticker from "react-ticker";
import classes from './MainBlock.module.scss'
import word from '../../images/arabicPic.png'
import sauce from '../../images/sauce.jpg'
import bottle from '../../images/bottle.png'
import PaperTickerCompact from '../PaperTickerCompact/PaperTickerCompact';


const MainBlock = () => {
  return (
    <div className={classes.mainBlock}>
      <div className={classes.mainBlockLeft}>
        <div className={classes.mainBlockLeftWord}>
            <img src={word}/>
        </div>
        <div className={classes.mainBlockLine}>
          <PaperTickerCompact text='put some fire in your belly'/>
        </div>
        <div className={classes.mainBlockLeftBottom}>
            <img src={sauce}/>
        </div>
      </div>
      <div className={classes.mainBlockRight}>
        <div className={classes.mainBlockRightTitle}>
        THE FIRST HOT SAUCE MADE FOR COFFEE
        </div>
        <div className={classes.mainBlockRightPic}>
            <img src={bottle} alt="bottle" />
        </div>
      </div>
    </div>
  )
}

export default MainBlock
