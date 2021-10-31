const TOKEN_ADDRESS = 'TShRHNNhJCfi8th3uyUMzeASPXAuFaiLVE';
const TOKEN_ABI = [
  { inputs: [], stateMutability: 'nonpayable', type: 'constructor' },
  {
    anonymous: false,
    inputs: [
      {
        indexed: true,
        internalType: 'address',
        name: 'owner',
        type: 'address',
      },
      {
        indexed: true,
        internalType: 'address',
        name: 'spender',
        type: 'address',
      },
      {
        indexed: false,
        internalType: 'uint256',
        name: 'value',
        type: 'uint256',
      },
    ],
    name: 'Approval',
    type: 'event',
  },
  {
    anonymous: false,
    inputs: [
      {
        indexed: true,
        internalType: 'address',
        name: 'previousOwner',
        type: 'address',
      },
      {
        indexed: true,
        internalType: 'address',
        name: 'newOwner',
        type: 'address',
      },
    ],
    name: 'OwnershipTransferred',
    type: 'event',
  },
  {
    anonymous: false,
    inputs: [
      { indexed: true, internalType: 'address', name: 'from', type: 'address' },
      { indexed: true, internalType: 'address', name: 'to', type: 'address' },
      {
        indexed: false,
        internalType: 'uint256',
        name: 'value',
        type: 'uint256',
      },
    ],
    name: 'Transfer',
    type: 'event',
  },
  {
    inputs: [
      { internalType: 'address', name: 'owner', type: 'address' },
      { internalType: 'address', name: 'spender', type: 'address' },
    ],
    name: 'allowance',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [
      { internalType: 'address', name: 'spender', type: 'address' },
      { internalType: 'uint256', name: 'amount', type: 'uint256' },
    ],
    name: 'approve',
    outputs: [{ internalType: 'bool', name: '', type: 'bool' }],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: 'account', type: 'address' }],
    name: 'balanceOf',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'decimals',
    outputs: [{ internalType: 'uint8', name: '', type: 'uint8' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [
      { internalType: 'address', name: 'spender', type: 'address' },
      { internalType: 'uint256', name: 'subtractedValue', type: 'uint256' },
    ],
    name: 'decreaseAllowance',
    outputs: [{ internalType: 'bool', name: '', type: 'bool' }],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [
      { internalType: 'address', name: '_account', type: 'address' },
      { internalType: 'uint256', name: '_amount', type: 'uint256' },
    ],
    name: 'faucet',
    outputs: [],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [],
    name: 'getOwner',
    outputs: [{ internalType: 'address', name: '', type: 'address' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [
      { internalType: 'address', name: 'spender', type: 'address' },
      { internalType: 'uint256', name: 'addedValue', type: 'uint256' },
    ],
    name: 'increaseAllowance',
    outputs: [{ internalType: 'bool', name: '', type: 'bool' }],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'uint256', name: 'amount', type: 'uint256' }],
    name: 'mint',
    outputs: [{ internalType: 'bool', name: '', type: 'bool' }],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [],
    name: 'name',
    outputs: [{ internalType: 'string', name: '', type: 'string' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'owner',
    outputs: [{ internalType: 'address', name: '', type: 'address' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'renounceOwnership',
    outputs: [],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [],
    name: 'symbol',
    outputs: [{ internalType: 'string', name: '', type: 'string' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'totalSupply',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [
      { internalType: 'address', name: 'recipient', type: 'address' },
      { internalType: 'uint256', name: 'amount', type: 'uint256' },
    ],
    name: 'transfer',
    outputs: [{ internalType: 'bool', name: '', type: 'bool' }],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [
      { internalType: 'address', name: 'sender', type: 'address' },
      { internalType: 'address', name: 'recipient', type: 'address' },
      { internalType: 'uint256', name: 'amount', type: 'uint256' },
    ],
    name: 'transferFrom',
    outputs: [{ internalType: 'bool', name: '', type: 'bool' }],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: 'newOwner', type: 'address' }],
    name: 'transferOwnership',
    outputs: [],
    stateMutability: 'nonpayable',
    type: 'function',
  },
];

const STAKING_ADDRESS = 'TMLhPpVjx8TnnvXDysMcYazWzoEzBzn1eV';
const STAKING_ABI = [
  {
    inputs: [{ internalType: 'address', name: '_token', type: 'address' }],
    stateMutability: 'nonpayable',
    type: 'constructor',
  },
  {
    anonymous: false,
    inputs: [
      { indexed: true, internalType: 'address', name: 'user', type: 'address' },
      {
        indexed: false,
        internalType: 'uint256',
        name: 'totalAmount',
        type: 'uint256',
      },
    ],
    name: 'FeePayed',
    type: 'event',
  },
  {
    anonymous: false,
    inputs: [
      { indexed: true, internalType: 'address', name: 'user', type: 'address' },
      { indexed: false, internalType: 'uint8', name: 'plan', type: 'uint8' },
      {
        indexed: false,
        internalType: 'uint256',
        name: 'percent',
        type: 'uint256',
      },
      {
        indexed: false,
        internalType: 'uint256',
        name: 'amount',
        type: 'uint256',
      },
      {
        indexed: false,
        internalType: 'uint256',
        name: 'profit',
        type: 'uint256',
      },
      {
        indexed: false,
        internalType: 'uint256',
        name: 'start',
        type: 'uint256',
      },
      {
        indexed: false,
        internalType: 'uint256',
        name: 'finish',
        type: 'uint256',
      },
    ],
    name: 'NewDeposit',
    type: 'event',
  },
  {
    anonymous: false,
    inputs: [
      {
        indexed: false,
        internalType: 'address',
        name: 'user',
        type: 'address',
      },
    ],
    name: 'Newbie',
    type: 'event',
  },
  {
    anonymous: false,
    inputs: [
      {
        indexed: true,
        internalType: 'address',
        name: 'referrer',
        type: 'address',
      },
      {
        indexed: true,
        internalType: 'address',
        name: 'referral',
        type: 'address',
      },
      {
        indexed: true,
        internalType: 'uint256',
        name: 'level',
        type: 'uint256',
      },
      {
        indexed: false,
        internalType: 'uint256',
        name: 'amount',
        type: 'uint256',
      },
    ],
    name: 'RefBonus',
    type: 'event',
  },
  {
    anonymous: false,
    inputs: [
      { indexed: true, internalType: 'address', name: 'user', type: 'address' },
      {
        indexed: false,
        internalType: 'uint256',
        name: 'amount',
        type: 'uint256',
      },
    ],
    name: 'Withdrawn',
    type: 'event',
  },
  {
    inputs: [],
    name: 'INVEST_MIN_AMOUNT',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'PERCENTS_DIVIDER',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'PROJECT_FEE',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    name: 'REFERRAL_PERCENTS',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'TIME_STEP',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'Token',
    outputs: [{ internalType: 'contract ITRC20', name: '', type: 'address' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'WITHDRAW_MIN_AMOUNT',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [
      { internalType: 'address', name: '_user', type: 'address' },
      { internalType: 'uint256', name: '_index', type: 'uint256' },
    ],
    name: 'allowUnstake',
    outputs: [],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [
      { internalType: 'address', name: '_user', type: 'address' },
      { internalType: 'uint256', name: '_index', type: 'uint256' },
    ],
    name: 'coolDownPeriod',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'getContractBalance',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'uint8', name: 'plan', type: 'uint8' }],
    name: 'getPercent',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'uint8', name: 'plan', type: 'uint8' }],
    name: 'getPlanInfo',
    outputs: [
      { internalType: 'uint256', name: 'time', type: 'uint256' },
      { internalType: 'uint256', name: 'percent', type: 'uint256' },
    ],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [
      { internalType: 'uint8', name: 'plan', type: 'uint8' },
      { internalType: 'uint256', name: 'deposit', type: 'uint256' },
    ],
    name: 'getResult',
    outputs: [
      { internalType: 'uint256', name: 'percent', type: 'uint256' },
      { internalType: 'uint256', name: 'profit', type: 'uint256' },
      { internalType: 'uint256', name: 'finish', type: 'uint256' },
    ],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: 'userAddress', type: 'address' }],
    name: 'getUserAmountOfDeposits',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: 'userAddress', type: 'address' }],
    name: 'getUserAvailable',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: 'userAddress', type: 'address' }],
    name: 'getUserCheckpoint',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [
      { internalType: 'address', name: 'userAddress', type: 'address' },
      { internalType: 'uint256', name: 'index', type: 'uint256' },
    ],
    name: 'getUserDepositInfo',
    outputs: [
      { internalType: 'uint8', name: 'plan', type: 'uint8' },
      { internalType: 'uint256', name: 'percent', type: 'uint256' },
      { internalType: 'uint256', name: 'amount', type: 'uint256' },
      { internalType: 'uint256', name: 'profit', type: 'uint256' },
      { internalType: 'uint256', name: 'start', type: 'uint256' },
      { internalType: 'uint256', name: 'finish', type: 'uint256' },
    ],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: 'userAddress', type: 'address' }],
    name: 'getUserDividends',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: 'userAddress', type: 'address' }],
    name: 'getUserDownlineCount',
    outputs: [
      { internalType: 'uint256', name: '', type: 'uint256' },
      { internalType: 'uint256', name: '', type: 'uint256' },
      { internalType: 'uint256', name: '', type: 'uint256' },
      { internalType: 'uint256', name: '', type: 'uint256' },
      { internalType: 'uint256', name: '', type: 'uint256' },
    ],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: 'userAddress', type: 'address' }],
    name: 'getUserReferralBonus',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: 'userAddress', type: 'address' }],
    name: 'getUserReferralTotalBonus',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: 'userAddress', type: 'address' }],
    name: 'getUserReferralWithdrawn',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: 'userAddress', type: 'address' }],
    name: 'getUserReferrer',
    outputs: [{ internalType: 'address', name: '', type: 'address' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: 'userAddress', type: 'address' }],
    name: 'getUserTotalDeposits',
    outputs: [{ internalType: 'uint256', name: 'amount', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [
      { internalType: 'address', name: 'referrer', type: 'address' },
      { internalType: 'uint8', name: 'plan', type: 'uint8' },
      { internalType: 'uint256', name: '_amount', type: 'uint256' },
    ],
    name: 'invest',
    outputs: [],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [],
    name: 'startUNIX',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'totalRefBonus',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'totalStaked',
    outputs: [{ internalType: 'uint256', name: '', type: 'uint256' }],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [
      { internalType: 'address', name: '_user', type: 'address' },
      { internalType: 'uint256', name: '_index', type: 'uint256' },
    ],
    name: 'unstake',
    outputs: [],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [],
    name: 'withdraw',
    outputs: [],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [{ internalType: 'address', name: '_user', type: 'address' }],
    name: 'withdrawReferralBonus',
    outputs: [],
    stateMutability: 'nonpayable',
    type: 'function',
  },
];

var userAddress;
var instance_Token;
var instance_Staking;
var isConnected;
var startDate;
var nowDate;
var refBonus;
var userTotalDeposits;
var optionValue;

const initialize = async () => {
  setInterval(async () => {
    // await connectWallet();
    // await fetchAllData();
  }, 5000);

  // connectWallet();
  async function connectWallet() {
    await tronLink
      .request({ method: 'tron_requestAccounts' })
      .then(async (res) => {
        await tronWeb.trx.getAccount().then(async (res) => {
          // console.log(res.address);

          let a = await tronWeb.address.fromHex(res.address);

          userAddress = a;
        });
        // setUserAddress(userAddress);
        // alert('Hello');
        // console.log(res.accounts);
        if (window.tronWeb && window.tronWeb.defaultAddress.base58) {
          userAddress = window.tronWeb.defaultAddress.base58;
          // userAddress = 'TP52RuYnfdfWuk8K3fV6bCG9z9Gfzg8z2B';
          // setUserAddress(userAddress);
          $('#inpAdd').val(userAddress);
          instance_Token = await tronWeb.contract(TOKEN_ABI, TOKEN_ADDRESS);
          instance_Staking = await tronWeb.contract(
            STAKING_ABI,
            STAKING_ADDRESS
          );
          isConnected = true;
          await getOneTime();
          $('#WalletConnectBtn').text('Disconnect');
        } else {
          alert('Please install tronlink wallet!');
        }
      });

    await tronWeb.trx.getAccount().then(async (res) => {
      // console.log(res.address);

      let a = await tronWeb.address.fromHex(res.address);

      userAddress = a;
    });
    // setUserAddress(userAddress);
    // alert('Hello');
    // console.log(res.accounts);
    if (window.tronWeb && window.tronWeb.defaultAddress.base58) {
      userAddress = window.tronWeb.defaultAddress.base58;
      // userAddress = 'TP52RuYnfdfWuk8K3fV6bCG9z9Gfzg8z2B';
      // setUserAddress(userAddress);
      $('#inpAdd').val(userAddress);
      instance_Token = await tronWeb.contract(TOKEN_ABI, TOKEN_ADDRESS);
      instance_Staking = await tronWeb.contract(STAKING_ABI, STAKING_ADDRESS);
      isConnected = true;
      await getOneTime();
      $('#WalletConnectBtn').text('Disconnect');
    } else {
      alert('Please install tronlink wallet!');
    }

    // await ethereum
    //   .request({ method: 'eth_requestAccounts' })
    //   .then(async (res) => {
    //     console.log(res);
    //   });

    // if (window.tronWeb && window.tronWeb.defaultAddress.base58) {
    //   // tronLink.request({ method: 'tron_requestAccounts' }).then((res) => {
    //   //   console.log(res);
    //   // });

    //   userAddress = window.tronWeb.defaultAddress.base58;

    //   // userAddress = 'TP52RuYnfdfWuk8K3fV6bCG9z9Gfzg8z2B';

    //   //   setUserAddress(userAddress);

    //   $('#inpAdd').val(userAddress);

    //   instance_Token = await tronWeb.contract(TOKEN_ABI, TOKEN_ADDRESS);
    //   instance_Staking = await tronWeb.contract(STAKING_ABI, STAKING_ADDRESS);

    //   isConnected = true;
    //   await getOneTime();
    //   $('#WalletConnectBtn').text('Disconnect');
    // } else {
    //   alert('Please install tronlink wallet!');
    // }
  }

  async function fetchData() {
    await tronWeb.trx.getBalance(userAddress).then((res) => {
      $('#trxBalance').text(parseFloat(res / 1e6).toFixed(0));
    });

    await instance_Token.methods
      .balanceOf(userAddress)
      .call()
      .then((res) => {
        $('#bntxBalance').text(parseFloat(res / 1e18));
      });

    await instance_Staking.methods
      .getUserTotalDeposits(userAddress)
      .call()
      .then((res) => {
        // console.log(res.amount);
        // console.log(parseFloat(res.amount / 1e18).toFixed(2));
        $('#totalStaked').text(parseFloat(res.amount / 1e18).toFixed(2));
      });

    await instance_Staking.methods
      .getUserReferralTotalBonus(userAddress)
      .call()
      .then((res) => {
        // console.log(res.referalReward);
        $('#refReward').text(parseFloat(res / 1e18).toFixed(2));

        refBonus = parseFloat(res / 1e18).toFixed(2);
      });

    await instance_Staking.methods
      .getUserReferralBonus(userAddress)
      .call()
      .then((res) => {
        // console.log(res);
        // console.log(parseFloat(res.lvOne / 1e18).toFixed(2));
        $('#avalBonus').text(parseFloat(res / 1e18).toFixed(2));
        // $('#l02').text(parseFloat(res.lvTwo / 1e18).toFixed(2));
        // $('#l03').text(parseFloat(res.lvThree / 1e18).toFixed(2));
        // $('#l04').text(parseFloat(res.lvForth / 1e18).toFixed(2));
        // $('#l05').text(parseFloat(res.lvFifth / 1e18).toFixed(2));
      });

    await instance_Staking.methods
      .getUserDownlineCount(userAddress)
      .call()
      .then((res) => {
        $('#l01').text(parseFloat(res[0]).toFixed(0));
        $('#l02').text(parseFloat(res[1]).toFixed(0));
        $('#l03').text(parseFloat(res[2]).toFixed(0));
        $('#l04').text(parseFloat(res[3]).toFixed(0));
        $('#l05').text(parseFloat(res[4]).toFixed(0));
      });

    await instance_Staking.methods
      .getUserDividends(userAddress)
      .call()
      .then((res) => {
        $('#unclaimReward').text(parseFloat(res / 1e18).toFixed(8));
      });
  }

  async function getOneTime() {
    await instance_Staking.methods
      .getUserAmountOfDeposits(userAddress)
      .call()
      .then((res) => {
        // console.log(parseFloat(res));
        userTotalDeposits = parseFloat(res);
        addOption();
        // $('#unclaimReward').text(parseFloat(res / 1e18).toFixed(8));
      });
  }

  async function _stake(_ref, _time, _amount) {
    await instance_Staking.methods
      .invest(_ref, _time, _amount)
      .send({ from: userAddress })
      .then((res) => {
        // console.log(res);
      });
  }

  async function _approve(_amount) {
    await instance_Token.methods
      .approve(STAKING_ADDRESS, _amount)
      .send({ from: userAddress })
      .then((res) => {
        // console.log(res);
      });
  }

  $('#btnStake').click(async () => {
    let upline = $('#upline').val();

    // let upline = 'TP52RuYnfdfWuk8K3fV6bCG9z9Gfzg8z2B';

    let amt = $('#amount').val();

    let amount = parseFloat(amt * 1e18).toFixed(0);

    let time = $('#days').val();

    if (isConnected == true) {
      // if (time < 3) {
      // alert('Please select days');
      // } else {
      await _approve(amount).then(async (res) => {
        await _stake(upline, time, amount);
      });
      // }
    } else {
      alert('Please Connect Wallet!');
    }
  });

  // Number with comas seprator
  function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ',');
  }

  $('#WalletConnectBtn').click(async () => {
    if (userAddress) {
      await disconnect();
    } else {
      await connectWallet();
    }
  });

  $('#allowUnStake').click(async () => {
    let index = $('#depOption').val();

    if (!index) {
      alert('Please Select Deposit!');
    } else {
      if (isConnected == true) {
        await instance_Staking.methods
          .allowUnstake(userAddress, index)
          .send({ from: userAddress })
          .then((res) => {
            console.log(res);
          });
      } else {
        alert('Please Connect Wallet!');
      }
    }
  });

  $('#unstake').click(async () => {
    let index = $('#depOption').val();

    if (!index) {
      alert('Please Select Deposit!');
    } else {
      if (isConnected == true) {
        await instance_Staking.methods
          .unstake(userAddress, index)
          .send({ from: userAddress })
          .then((res) => {
            console.log(res);
          });
      } else {
        alert('Please Connect Wallet!');
      }
    }
  });

  $('#claimRef').click(async () => {
    if (isConnected == true) {
      await instance_Staking.methods
        .withdrawReferralBonus(userAddress)
        .send({ from: userAddress })
        .then((res) => {
          console.log(res);
        });
    } else {
      alert('Please Connect Wallet!');
    }
  });

  $('#claimRwd').click(async () => {
    if (isConnected == true) {
      await instance_Staking.methods
        .withdraw()
        .send({ from: userAddress })
        .then((res) => {
          console.log(res);
        });
    } else {
      alert('Please Connect Wallet!');
    }
  });

  $('#depOption').on('change', function () {
    console.log(this.value);
    // getTimer(this.value);

    optionValue = this.value;
  });

  async function getTimer(_value) {
    if (isConnected == true) {
      await instance_Staking.methods
        .coolDownPeriod(userAddress, _value)
        .call()
        .then((res) => {
          startDate = parseFloat(res);

          // console.log(startDate);
          nowDate = new Date().getTime() / 1000;
          if (startDate > nowDate) {
            countDown(startDate);
          }
        });
    }
  }

  async function disconnect() {
    // console.log(userAddress);

    isConnected = false;
    userAddress = null;
    // console.log(userAddress);

    $('#inpAdd').val(userAddress);
    $('#WalletConnectBtn').text('Connect');
  }

  function countDown(dateVal) {
    $('.countdown').each(function () {
      let thisCount = $(this);

      // let x = setInterval(function () {
      let distance = parseInt(dateVal) - new Date().getTime() / 1000;

      let days = Math.floor(distance / (3600 * 24));
      let hours = Math.floor((distance % (3600 * 24)) / 3600);
      let minutes = Math.floor((distance % 3600) / 60);
      let seconds = Math.floor(distance % 60);

      if (days > 0) thisCount.find('.counter-holder .day').html(days);
      else thisCount.find('.counter-holder .day').html('00');
      if (hours > 0) thisCount.find('.counter-holder .hours').html(hours);
      else thisCount.find('.counter-holder .hours').html('00');
      if (minutes > 0) thisCount.find('.counter-holder .minutes').html(minutes);
      else thisCount.find('.counter-holder .minutes').html('00');
      if (seconds > 0) thisCount.find('.counter-holder .seconds').html(seconds);
      else thisCount.find('.counter-holder .seconds').html('00');

      if (distance < 0) {
        clearInterval(x);
        $('#connectWallet').removeClass('d-none');
      }
      // }, 1000);
    });
  }

  function checkValidation() {
    if (refBonus > 0) {
      $('#claimRef').removeAttr('disabled', 'disabled');
    }

    if (startDate > nowDate) {
      $('#unstake').attr('disabled', 'disabled');
    }

    if (startDate > 0) {
      // console.log('Pass');
      // $('#allowUnStake').attr('disabled', 'disabled');
    } else {
      // console.log('Fail');
      // $('#unstake').attr('disabled', 'disabled');
    }
  }

  // async function getDeposits() {
  //   for (var i = 0; i < userTotalDeposits; i++) {
  //     await instance_Staking.methods
  //       .getUserDepositInfo(userAddress, i)
  //       .call()
  //       .then((res) => {
  //         console.log(res);
  //         console.log(parseFloat(res.amount / 1e18));
  //       });
  //   }
  // }

  function addelement(_depositDate, _amount, _plan, _finish) {
    var completelist = document.getElementById('depositHistory');
    completelist.innerHTML +=
      '<tr><td>' +
      _depositDate +
      '</td>   <td>' +
      _amount +
      ' </td> <td> ' +
      _plan +
      ' </td> <td> ' +
      _finish +
      ' </td>  </tr>';
  }

  function addOption() {
    for (var i = 0; i < userTotalDeposits; i++) {
      let num = i + 1;

      $('#depOption').append(
        $('<option>', {
          value: i,
          text: 'Deposit ' + num,
        })
      );
    }
  }

  setInterval(async () => {
    if (isConnected == true) {
      await fetchData();
      checkValidation();
      await getTimer(optionValue);
    }

    // if (chainId == '56') {
    //   // swal("Oops", "Something went wrong!", "error");
    //   await fetchAllData();
    // }
  }, 3000);
};

window.addEventListener('DOMContentLoaded', initialize);
