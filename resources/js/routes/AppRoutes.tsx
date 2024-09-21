import { lazy, Suspense } from "react"
import { Route, Routes } from "react-router-dom"
import { PublicRoutes } from "./PublicRoutes"
import { ProtectedRoutes } from "./ProtectedRoutes"


const AppRoutes = () => {
  return (
    <>
      <Routes>
        {
          PublicRoutes?.map((page, idx) => (
            <Route
              key={idx}
              path={page?.path}
              element={page?.component}
            />
          ))
        }
      </Routes>
      <Routes>
        {
          ProtectedRoutes ?.map((page, idx) => (
            <Route
              key={idx}
              path={page?.path}
              element={page?.component}
            />
          ))
        }
      </Routes>
    </>
  )
}