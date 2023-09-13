import classes from './App.css';
import PaperTicker from './components/PaperTicker/PaperTicker';
import BannerPlace from './components/BannerPlace/BannerPlace';
import Footer from './components/Footer/Footer';
import GoodsPlace from './components/GoodsPlace/GoodsPlace';
import Header from './components/Header/Header';
import MainBlock from './components/MainBlock/MainBlock';
import SauceBanner from './components/SauceBanner/SauceBanner';
import SauceStory from './components/SauceStory/SauceStory';
import Slogan from './components/Slogan/Slogan';

function App() {
  return (
    <div className="App">
      <Header/>
      <MainBlock/>
      <Slogan/>
      <GoodsPlace/>
      <PaperTicker text='put some fire in your belly'/>
      <SauceBanner/>
      <SauceStory/>
      <PaperTicker text='contact for partnership oportunities'/>
      <BannerPlace/>
      <Footer/>
    </div>
  );
}

export default App;
