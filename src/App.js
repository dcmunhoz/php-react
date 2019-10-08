import React, { useState, useEffect } from 'react';
import './App.css';
import upperCase from 'upper-case';

function App() {
  const [todo, setTodo] = useState('');
  const [todos, setTodos] = useState([]);

  // useEffect(()=>{
  //   console.log(todos);
  // }, [todos]);

  function handleClick(e) {

    e.preventDefault();

    if (todo) {

      setTodos([...todos, todo]);
      setTodo('');

    } else {
      alert('Você não definiu uma tarefa =[');
    }

  }

  return (
    <div className="container">
      <header className="header">
        Todo React PHP
      </header>
      <div className="form-container">
        <form >
            <label htmlFor="task-name">TAREFA *</label>
            <input 
              type="text" 
              id="task-name" 
              placeholder="Sua tarefa insana"
              onChange={e => setTodo(e.target.value)}
              value={todo}
            />
        
            <button type="submit" onClick={handleClick}>Adicionar tarefa</button>
        </form>
      </div>

      <div className="todoContainer">
        <div className="todo-list">
          <ul>
            {todos.map((value, key) => (
              <li key={key}> &#128073;&#127995; { upperCase(value) } </li>
            ))}
          </ul>
        </div>
      </div>
    </div>
  )
}

export default App;
