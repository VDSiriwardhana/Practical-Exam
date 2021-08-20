import React from "react";

class App extends React.Component {
  constructor(props) {
    super(props)

    this.state = {
         username:'',
         password:'',
         email:''
    }
}
handleuserChange = (event) =>{
    this.setState({
        username : event.target.value
    })
}

handlesubmit = (event) =>{
    //alert(`User xe${this.state.username} is a ${this.state.email}`)
    event.preventDefault();
    
}
handlepassChange = (event) =>{
    this.setState({
        password:event.target.value
    })
}
handleemail = (event) =>{
    this.setState({
        email:event.target.value
    })
}
  
  render() {
    const {username,password,/*email*/} = this.state
    return (
      <div style={{textAlign:"center"}}>
        <form onSubmit={this.handlesubmit} action="loginProcess.php">
          <h2>Login</h2>
        <label>Username: </label>
        <input type="text" name ="userName" value={username} onChange={this.handleuserChange}/><br/>
        <label>Password: </label>
        <input type="password" name ="passWord" value={password} onChange={this.handlepassChange}/><br/>
        <button type="submit">Save</button>
        </form>
      </div>  
    );
  }
}

export default App;
