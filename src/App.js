import axios from 'axios';
import  React,{Component} from 'react';
import './App.css';

class App extends Component{
  state={
    text: " "
  };
  handleAdd=async e =>{
 await this.setState({
  text:e.target.value
 })
  }
  handlesubmit = e =>{
    e.preventDefault();
    console.log(this.state.text)
    let formData =new FormData();
    formData.append("text",this.state.text);
    const url="https://localhost/react-backend/load.php";
    axios.post(url,formData)
    .then(res =>console.log(res.data))
    .catch(err=>console.log(err));
    
  }
  render(){
    return(
      <div classname="App-header">

        <input 
        onChange={this.handleAdd}
        type ="text"
         className='form-control'
        //  value={this.state.text}
          id ="Text" 
           placeholder='enter the text '/>
        <br/>

        <button 
        onClick={this.handlesubmit}
        id ="submit "
         className=' button btn btn-success btn-lg'> save </button>
  
      </div>
    );
  }
}

 
export default App;