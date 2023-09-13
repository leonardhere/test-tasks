import React from 'react'
import classes from './Footer.module.scss'

const Footer = () => {
  return (
    <div className={classes.Footer}>
      <a href='#' className={classes.FooterItemLink}>privacy</a>
      <div className={classes.FooterItem}>ujjo llc, columbus oh, 43219</div>
      <a href='#' className={classes.FooterItemLink}>instagram</a>
    </div>
  )
}

export default Footer
