import React from 'react'
import classes from './BannerPlace.module.scss'
import bigBanner from '../../images/big-banner.png'

const BannerPlace = () => {
  return (
    <div className={classes.BannerPlace}>
      <img src={bigBanner} alt="" />
    </div>
  )
}

export default BannerPlace
