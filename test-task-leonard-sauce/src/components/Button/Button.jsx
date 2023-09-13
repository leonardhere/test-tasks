import React from 'react'
import classes from './Button.module.scss'

const Button = ({title}) => {
  return (
    <button className={classes.button}>
        {title}
    </button>
  )
}

export default Button
