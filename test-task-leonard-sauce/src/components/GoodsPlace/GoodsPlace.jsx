import React from 'react'
import classes from './GoodsPlace.module.scss'
import LightRoast from '../../images/light-roast.png'
import sampler from '../../images/ujjo-sampler.png'
import darkRoast from '../../images/dark-roast.png'

const GoodsPlace = () => {
  return (
    <div className={classes.Googslace}>
      <div className={classes.GoodsPlaceHeader}>
        <div className={classes.littleFlame}></div>
        <div className={classes.bigFlame}></div>
        <div className={classes.bigFlame}></div>
        <div className={classes.littleFlame}></div>
      </div>
      <div className={classes.GoodsPlaceItems}>
        <div className={classes.GoodsPlaceItem}>
            <div className={classes.GoodsPlaceItemTitle}>tangy and tingly</div>
            <div className={classes.GoodsPlaceItemDescr}>LIGHT ROAST BLEND</div>
            <img src={LightRoast} alt="brandimg" />
        </div>
        <div className={classes.GoodsPlaceItem}>
            <div className={classes.GoodsPlaceItemTitle}>light & dark roast</div>
            <div className={classes.GoodsPlaceItemDescr}>UJJO SAMPLER PACK</div>
            <img src={sampler} alt="brandimg" />
        </div>
        <div className={classes.GoodsPlaceItem}>
            <div className={classes.GoodsPlaceItemTitle}>tangy and tingly</div>
            <div className={classes.GoodsPlaceItemDescr}>DARK ROAST BLEND</div>
            <img src={darkRoast} alt="brandimg" />
        </div>
      </div>
    </div>
  )
}

export default GoodsPlace
