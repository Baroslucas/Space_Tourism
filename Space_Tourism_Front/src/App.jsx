
import './App.css'
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import { HeaderLayout } from './layout/HeaderLayout'
import { HomePage } from './pages/Homepage/HomePage'
import { DestinationPage } from './pages/DestinationPage/DestinationPage';
import { CrewMemberPage } from './pages/CrewMemberPage/CrewMemberPage';
import { TechnoPage } from './pages/TechnoPage/TechnoPage';


function App() {

  return (
    <BrowserRouter>
      <Routes>
        <Route element={<HeaderLayout />}>
          <Route path="/" element={<HomePage />} />
          <Route path="/destination" element={<DestinationPage/>} />
          <Route path="/crew" element={<CrewMemberPage />} />
          <Route path="/technology" element={<TechnoPage />} />
        </Route>
      </Routes>
    </BrowserRouter>
  )
}

export default App
