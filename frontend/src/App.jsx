import KategoriaSelect from "./components/KategoriaSelect";
import TablazatReceptek from "./components/TablazatReceptek";
import EgyRecept from "./components/EgyRecept";

function App() {
  return (
    <div className="container">
      <h1>Receptkönyv</h1>
      <KategoriaSelect />
      <TablazatReceptek />
      <EgyRecept />
    </div>
  );
}

export default App;