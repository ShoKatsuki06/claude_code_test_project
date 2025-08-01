# Claude Laravel Project Wiki

[![Laravel](https://img.shields.io/badge/Laravel-11.x-red.svg)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://php.net/)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

Welcome to the **Claude Laravel Project** wiki! この包括的なドキュメントでは、Claude Codeを使用して構築されたLaravelベースのWebアプリケーションについて詳しく説明します。

## 🚀 プロジェクト概要

このプロジェクトは、AI支援開発（Claude Code）を活用してモダンなWebアプリケーションを構築する実践的なデモンストレーションです。Laravel 11.xをベースとし、DRY原則、レスポンシブデザイン、CI/CD等のベストプラクティスを実装しています。

### 🎯 プロジェクトの目的
- **AI支援開発の実証**: Claude Codeによる効率的な開発プロセス
- **モダンWeb開発**: 最新のLaravel機能とフロントエンド技術の活用
- **ベストプラクティス**: コード品質、テスト、デプロイメントの標準化
- **ドキュメント化**: 包括的なプロジェクト文書の作成

## 📖 Wiki構成

### 基本情報
- **[プロジェクト設定](Project-Setup.md)** - 開発環境のセットアップ手順
- **[アーキテクチャ](Architecture.md)** - システム設計とコンポーネント構成
- **[技術スタック](Tech-Stack.md)** - 使用技術とライブラリの詳細

### 開発ガイド
- **[開発環境構築](Development-Environment.md)** - ローカル開発環境の構築
- **[コーディング規約](Coding-Standards.md)** - プロジェクトのコーディングルール
- **[Git ワークフロー](Git-Workflow.md)** - ブランチ戦略とマージプロセス

### 機能ドキュメント
- **[ページ機能](Pages-Documentation.md)** - 各ページの機能と実装詳細
- **[UI/UX ガイド](UI-UX-Guidelines.md)** - デザインシステムとスタイルガイド
- **[API仕様](API-Documentation.md)** - APIエンドポイントと仕様（将来実装予定）

### 運用・保守
- **[デプロイメント](Deployment.md)** - 本番環境への展開方法
- **[CI/CD パイプライン](CI-CD-Pipeline.md)** - 自動化ワークフローの詳細
- **[トラブルシューティング](Troubleshooting.md)** - よくある問題と解決方法

## 🎯 現在実装されている機能

### ✅ 完成済み機能
| 機能 | 説明 | 実装状況 |
|------|------|----------|
| **🏠 ホームページ** | Laravelウェルカムページ（カスタマイズ済み） | ✅ 完了 |
| **ℹ️ Aboutページ** | フレームワーク情報とキー機能の紹介 | ✅ 完了 |
| **🛠️ Servicesページ** | 包括的なサービス紹介（4カテゴリ） | ✅ 完了 |
| **📞 Contactページ** | ビジネス連絡先情報とお問い合わせ | ✅ 完了 |
| **🎨 レイアウトシステム** | DRY原則に基づく共通テンプレート | ✅ 完了 |
| **🌙 ダークモード** | システム設定に応じた自動切り替え | ✅ 完了 |
| **📱 レスポンシブデザイン** | モバイルファーストデザイン | ✅ 完了 |
| **⚡ GitHub Actions** | PR作成時のSlack通知システム | ✅ 完了 |

### 🚧 開発予定機能
| 機能 | 説明 | 優先度 | Issue |
|------|------|--------|-------|
| **👤 ユーザー認証** | ログイン・登録・パスワードリセット | 🔴 高 | [#5](https://github.com/ShoKatsuki06/claude_code_test_project/issues/5) |
| **📊 ユーザープロファイル** | プロファイル管理とアバター機能 | 🔴 高 | [#4](https://github.com/ShoKatsuki06/claude_code_test_project/issues/4) |
| **🔐 認可システム** | ロールベースアクセス制御 | 🟡 中 | 未作成 |
| **📊 ダッシュボード** | ユーザー専用ダッシュボード | 🟡 中 | 未作成 |

## 🛠️ 技術スタック

### フロントエンド
- **フレームワーク**: Laravel Blade Templates
- **CSS**: Tailwind CSS v4.0.7 (外部ファイル化済み)
- **JavaScript**: Vanilla JS（必要に応じて）
- **アイコン**: Emoji + 将来的にはSVGアイコン

### バックエンド
- **フレームワーク**: Laravel 11.x
- **言語**: PHP 8.2+
- **データベース**: SQLite（開発環境）/ MySQL（本番環境予定）
- **認証**: Laravel Breeze（実装予定）

### 開発・運用ツール
- **バージョン管理**: Git + GitHub
- **CI/CD**: GitHub Actions（Slack通知機能付き）
- **パッケージ管理**: Composer + npm
- **コンテナ**: Docker + Docker Compose（設定済み）
- **Web サーバー**: Nginx（Docker環境）

## 📊 プロジェクト統計

### 開発進捗
- **総コミット数**: 15+ commits
- **アクティブブランチ**: 3 branches
- **プルリクエスト**: 3 PRs（2 merged, 1 open）
- **Issues**: 2 open, 0 closed
- **コード行数**: 1,000+ lines
- **ドキュメント**: 5+ files

### ファイル構成
```
📁 claude_laravel_project/
├── 📁 app/Http/Controllers/     # コントローラー（4ファイル）
├── 📁 resources/views/          # Bladeテンプレート（5ファイル）
├── 📁 public/css/              # 外部CSS（1ファイル）
├── 📁 routes/                  # ルート定義（1ファイル）
├── 📁 .github/workflows/       # CI/CDワークフロー（1ファイル）
├── 📁 docs/                    # プロジェクトドキュメント
└── 📁 database/               # データベース関連
```

## 🤝 コントリビューション

### 開発フロー
1. **Issue作成**: 新機能やバグ修正のためのIssue作成
2. **ブランチ作成**: `feature/` または `bugfix/` プレフィックス
3. **開発**: コーディング規約に従った実装
4. **プルリクエスト**: 詳細な説明とレビュー依頼
5. **コードレビュー**: 品質確保のためのレビュープロセス
6. **マージ**: mainブランチへのマージ

### 最近のPull Request例
- **[PR #3: Servicesページの追加](https://github.com/ShoKatsuki06/claude_code_test_project/pull/3)** - 包括的なサービス紹介機能の実装
- **[PR #2: DRY原則の実装](https://github.com/ShoKatsuki06/claude_code_test_project/pull/2)** - レイアウトテンプレートとCSS外部化

## 🔗 重要リンク

### プロジェクトリンク
- **📁 メインリポジトリ**: https://github.com/ShoKatsuki06/claude_code_test_project
- **🐛 Issues**: https://github.com/ShoKatsuki06/claude_code_test_project/issues
- **🔀 Pull Requests**: https://github.com/ShoKatsuki06/claude_code_test_project/pulls
- **📊 Actions**: https://github.com/ShoKatsuki06/claude_code_test_project/actions

### 外部ドキュメント
- **📖 Laravel Documentation**: https://laravel.com/docs/11.x
- **🎨 Tailwind CSS**: https://tailwindcss.com/docs
- **🐳 Docker**: https://docs.docker.com/

## 📝 更新履歴

### v1.0.0 (2025-08-01)
- **🎉 プロジェクト開始**: 基本的なLaravelセットアップ
- **📄 基本ページ実装**: Home、About、Services、Contactページ
- **🎨 DRY原則適用**: レイアウトテンプレートとCSS外部化
- **⚡ CI/CD設定**: GitHub ActionsでのSlack通知機能
- **📚 ドキュメント作成**: 包括的なプロジェクトwiki

### 今後の予定
- **v1.1.0**: ユーザー認証システムの実装
- **v1.2.0**: ユーザープロファイル管理機能
- **v2.0.0**: API機能とSPA化（検討中）

## 📞 サポート・お問い合わせ

- **🐛 バグ報告**: [Issues](https://github.com/ShoKatsuki06/claude_code_test_project/issues)で新しいissueを作成
- **💡 機能提案**: [Issues](https://github.com/ShoKatsuki06/claude_code_test_project/issues)で`enhancement`ラベル付きで作成
- **❓ 質問**: [Discussions](https://github.com/ShoKatsuki06/claude_code_test_project/discussions)（今後有効化予定）

---

**📅 最終更新**: 2025年8月1日  
**🤖 作成者**: Claude Code  
**📄 ライセンス**: MIT License

*このwikiはClaude Codeによって生成・管理されています*