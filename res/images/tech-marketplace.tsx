import React from 'react';
import { 
  ShoppingCart, 
  Search, 
  Menu,
  ChevronRight,
  Star
} from 'lucide-react';

const TechMarketplace = () => {
  const products = [
    {
      id: 1,
      name: "Quantum VR Headset Pro",
      price: "Rp 12.999.000",
      rating: 4.8,
      image: "/api/placeholder/300/200",
      description: "Experience next-gen virtual reality with 8K resolution per eye"
    },
    {
      id: 2,
      name: "HoloLens X",
      price: "Rp 15.499.000",
      rating: 4.9,
      image: "/api/placeholder/300/200",
      description: "Revolutionary augmented reality glasses with neural interface"
    },
    {
      id: 3,
      name: "NeoPhone 15",
      price: "Rp 18.999.000",
      rating: 4.7,
      image: "/api/placeholder/300/200",
      description: "Foldable holographic smartphone with quantum security"
    },
    {
      id: 4,
      name: "SmartWatch Ultra",
      price: "Rp 4.999.000",
      rating: 4.6,
      image: "/api/placeholder/300/200",
      description: "Bio-tracking smartwatch with health prediction AI"
    }
  ];

  return (
    <div className="min-h-screen bg-gradient-to-br from-gray-900 to-gray-800">
      {/* Navigation */}
      <nav className="bg-black/50 backdrop-blur-md border-b border-gray-700">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16">
            <div className="flex items-center">
              <span className="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-600">
                TechFuture
              </span>
            </div>
            
            <div className="hidden md:block">
              <div className="flex items-center space-x-4">
                <div className="relative">
                  <input
                    type="text"
                    placeholder="Search products..."
                    className="w-64 px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none focus:border-blue-500 text-gray-300"
                  />
                  <Search className="absolute right-3 top-2.5 h-5 w-5 text-gray-400" />
                </div>
                <ShoppingCart className="h-6 w-6 text-gray-300 hover:text-blue-400 cursor-pointer" />
                <Menu className="h-6 w-6 text-gray-300 hover:text-blue-400 cursor-pointer" />
              </div>
            </div>
          </div>
        </div>
      </nav>

      {/* Hero Section */}
      <div className="relative overflow-hidden">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
          <div className="text-center">
            <h1 className="text-4xl md:text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500">
              Welcome to the Future
            </h1>
            <p className="mt-4 text-xl text-gray-300">
              Discover Next-Generation Technology Today
            </p>
          </div>
        </div>
      </div>

      {/* Products Grid */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {products.map((product) => (
            <div
              key={product.id}
              className="bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-xl overflow-hidden hover:transform hover:scale-105 transition-all duration-300"
            >
              <img
                src={product.image}
                alt={product.name}
                className="w-full h-48 object-cover"
              />
              <div className="p-6">
                <h3 className="text-xl font-semibold text-white mb-2">
                  {product.name}
                </h3>
                <p className="text-gray-400 text-sm mb-4">
                  {product.description}
                </p>
                <div className="flex items-center justify-between">
                  <span className="text-lg font-bold text-blue-400">
                    {product.price}
                  </span>
                  <div className="flex items-center">
                    <Star className="h-5 w-5 text-yellow-400 fill-current" />
                    <span className="ml-1 text-gray-300">{product.rating}</span>
                  </div>
                </div>
                <button className="mt-4 w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 px-4 rounded-lg hover:opacity-90 transition-opacity duration-200 flex items-center justify-center">
                  Add to Cart
                  <ChevronRight className="ml-2 h-5 w-5" />
                </button>
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
};

export default TechMarketplace;
