import React from 'react'
import girl from '../../images/girl-with-sauce.png'
import classes from './SauceStory.module.scss'

const SauceStory = () => {
  return (
    <div className={classes.Saucestory}>
      <div className={classes.SauceStoryLeft}>
        <div className={classes.SauceStoryLeftTitle}>the story behind the souce</div>
        <img src={girl} alt="" />
      </div>
      <div className={classes.SauceStoryRight}>
        <div className={classes.SauceStoryDescr}>HELLO, I’M LAUREN AND AS A LIFELONG ADVENTUROUS EATER, I’VE TRIED A LOT OF CRAZY THINGS, BUT I NEVER THOUGHT HOT SAUCE IN COFFEE WAS A SANE OPTION UNTIL A FRIEND DARED ME TO TRY IT.</div>
        <div className={classes.SauceStoryDescr}>AND IT SUCKED.</div>
        <div className={classes.SauceStoryDescr}>BUT I WONDERED IF THERE WAS A WAY TO ADD SPICE TO MY COFFEE. WHEN THERE WAS NO EASY SOLUTION, UJJO WAS BORN.</div>
        <div className={classes.SauceStoryDescr}>UJJO (OOO-JOE): THE WORD FOR “FIRE” IN KONKANI, SPOKEN ON THE WEST COAST OF INDIA, IS AN HOMAGE AND A LOVE LETTER TO MY DAD, AN INDIAN IMMIGRANT WHO INSTILLED A FIRE IN MY PALATE – AND MY HEART – FROM THE VERY BEGINNING.</div>
      </div>
    </div>
  )
}

export default SauceStory
