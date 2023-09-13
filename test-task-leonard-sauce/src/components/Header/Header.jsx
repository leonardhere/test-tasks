import React from 'react'
import classes from './Header.module.scss'
import Button from '../Button/Button'
import headerPic from '../../images/header-pic.png'

const Header = () => {
  return (
    <header className={classes.header}>
      <Button title='Go back'/>
      <nav className={classes.navPanel}>
        <a href="#" className={classes.navLinksText}>story</a>
        <a href="#" className={classes.navLinksText}>shop</a>
        <a href="#">
          <img src={headerPic} alt="header-pic" />
        </a>
        <a href="#" className={classes.navLinksText}>contact</a>
        <a href="#" className={classes.navLinksText}>wholesale</a>
      </nav>
      <Button title='Clone'/>
    </header>
  )
}

export default Header
