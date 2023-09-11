import { TaskContext } from '@/context/ContextProvider'
import getRandomColor from '@/utils/getRandomColor'
import { Box, Button, FormControl, FormHelperText, Input, InputLabel, Stack } from '@mui/material'
import React, { useContext, useEffect, useState } from 'react'

const TaskForm = ({addTask}) => {
    const [taskName, setTaskName] = useState('')
    const [taskDesc, setTaskDesc] = useState('')
    const {dispatch} = useContext(TaskContext)
    
    const handleSubmit = (evt) => {
        try {
          evt.preventDefault()
          if(taskName && taskDesc){
            setCurrentColor(getRandomColor())
            const task = 
            {
              taskName:taskName,
              taskDesc:taskDesc,
            }
            dispatch(addTask(task))
            setTaskName('')
            setTaskDesc('')
          }else{
            throw new Error('Mandatory fields cannot be empty!')
          }
        } catch (error) {
          alert(error)
        }
    }
    const [currentColor, setCurrentColor] = useState('primary')

  return (
    <Stack 
      component='form' 
      onSubmit={handleSubmit} 
      sx={{margin:'16px'}}
      direction='column'
      justifyContent='center'
      alignItems='flex-start'
    >
        <FormControl 
          sx={{
            my:'2rem',
          }}
        >
            <InputLabel htmlFor="taskName">Имя задачи:</InputLabel>
            <Input id="taskName" aria-describedby="my-helper-text" 
              value={taskName}
              onChange={(evt)=>setTaskName(evt.target.value)}
              sx={{
                color:'var(--mui-palette-primary-dark)',
                'input':{
                  p:'8px',
                }
              }}
            />
            <FormHelperText id="taskName">Опишите наиболее точно имя задачи</FormHelperText>
        </FormControl>
        <FormControl>
            <InputLabel htmlFor="taskDesc">Описание задачи:</InputLabel>
            <Input id="taskDesc" aria-describedby="my-helper-text" 
              value={taskDesc}
              onChange={(evt)=>setTaskDesc(evt.target.value)}
              sx={{
                color:'var(--mui-palette-primary-dark)',
                'input':{
                  p:'8px',
                }
              }}
            />
            <FormHelperText id="taskDesc">Опишите вашу задачу</FormHelperText>
        </FormControl>
        <Button 
          variant='outlined' 
          type='Submit'
          color={currentColor}
          sx={{
            my:'2rem',
          }}
        >Добавить</Button>
    </Stack>
  )
}

export default TaskForm