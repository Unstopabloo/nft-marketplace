export const ETHEREUM_PRICE = async () => {
  try {
    const API_KEY = '4YFJ29UYQWTZ61B82XMMSXSB8RGFW6KTR1'
    const response = await fetch(
      `https://api.etherscan.io/api?module=stats&action=ethprice&apikey=${API_KEY}`
    )
    const data = await response.json()
    const ethPrice = data.result.ethusd
    return ethPrice
  } catch (error) {
    throw new Error('Error al obtener el precio de Ethereum:', error)
  }
}
