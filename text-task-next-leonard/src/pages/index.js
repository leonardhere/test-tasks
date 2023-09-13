import Head from 'next/head'
import { Inter } from 'next/font/google'
import { Container, Stack, Box } from '@mui/material'
import TaskForm from '@/components/TaskForm'
import TaskList from '@/components/TaskList'
import { useContext } from 'react'
import { TaskContext } from '@/context/ContextProvider'

const inter = Inter({ subsets: ['latin'] })

export default function Home() {

  const {tasks:taskList} = useContext(TaskContext).state;
  const addTask = (task) => ({type:'AddTask', payload:task})
  const markCompleted = (taskId) => ({type:'MarkCompleted', payload:taskId})
  const deleteTask = (taskId) => ({type:'DeleleTask', payload:taskId})
  const updateTask = (task) => ({type:'UpdateTask', payload:task})

  return (
    <>
      <Head>
        <title>To-Do List</title>
        <meta name="description" content="Generated by create next app" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <Container className={` ${inter.className}`}
        sx={{
          padding:'2rem 1rem !important',
          justifyContent:'flex-start !important',
          backgroundColor:'var(--mui-palette-common-background)',
          maxWidth:'100% !important',
          height:'100%',
          minHeight:'100vh',
        }}
        spacing='4'
      >
        <Stack direction='row' justifyContent='space-between' alignItems='center' width='100%'>
          <Box 
            sx={{
              color:'var(--mui-palette-primary-main)',
              pl:'6rem',
              '@media (max-width:600px)':{
                pl:'0',
              }
            }} 
            flexGrow='16' 
            textAlign='center'
          >
            <h1>To-Do-List App</h1>
          </Box>
        </Stack>
        <Stack width='100%' justifyContent='flex-start' alignItems='center'>
            <TaskForm addTask={addTask}/>
            <TaskList markCompleted={markCompleted} deleteTask={deleteTask} updateTask={updateTask}/>
        </Stack>
      </Container>
    </>
  )
}