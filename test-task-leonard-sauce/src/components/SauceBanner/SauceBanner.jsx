import React from 'react'
import classes from './SauceBanner.module.scss'
import banner from '../../images/sauce-banner.jpg'

const SauceBanner = () => {
  return (
    <div className={classes.Banner}>
      <img src={banner}/>
    </div>
  )
}

export default SauceBanner
